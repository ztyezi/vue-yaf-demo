<template>
  <div  id="app" class="layout">
    <Layout>
      <Header class="header-menu" :style="{position: 'fixed', width: '100%'}">
        <Menu mode="horizontal" theme="dark" active-name="1">
          <router-link to='/'>
            <div>
              <img class="layout-logo" src="../static/logo.png">
            </div>
          </router-link>
          <div class="layout-nav">
            <router-link to='/search'>
              <MenuItem name="1">
                <Icon type="ios-search" size="18"></Icon>
                综合查询
              </MenuItem>
            </router-link>
            <router-link to='/diagnose'>
              <MenuItem name="2">
                <Icon type="ios-analytics" size="18"></Icon>
                问题诊断
              </MenuItem>
            </router-link>
            <router-link to='/user'>
              <MenuItem name="3">
                <Icon type="ios-contact" size="18"></Icon>
                用户管理
              </MenuItem>
            </router-link>
          </div>
        </Menu>
      </Header>

      <Content :style="{margin: '80px 15px 0', background: '#fff', minHeight: '500px'}">
        <router-view/>
        <BackTop :height="60" :bottom="15">
          <div>
            <div class="ivu-back-top-inner">
              <i class="ivu-icon ivu-icon-ios-arrow-up"></i>
            </div>
          </div>

        </BackTop>
      </Content>

      <Footer class="layout-footer-center">
        &copy;2019 小船出海教育科技（北京）有限公司  作业帮
      </Footer>
    </Layout>
  </div>
</template>

<script>
export default {
  name: 'App'
}
</script>

<style scoped>
    .layout {
        border: 1px solid #d7dde4;
        background: #f5f7f9;
        position: relative;
        border-radius: 4px;
        overflow: hidden;
    }
    .ivu-layout-header {
        background: #515a6e;
        padding: 0 50px;
        height: 76px;
        line-height: 76px;
    }
    .ivu-menu-item {
        top: 8px;
    }
    .layout-logo {
        width: 100px;
        height: 30px;
        border-radius: 3px;
        float: left;
        position: relative;
        top: 22px;
        left: 20px;
    }
    .header-menu {
      z-index: 1000;
    }
    .layout-nav {
        width: 420px;
        margin: 0 auto;
        margin-right: 20px;
    }
    .layout-footer-center {
        text-align: center;
    }
</style>
